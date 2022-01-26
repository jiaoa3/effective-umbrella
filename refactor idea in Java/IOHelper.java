import java.util.List;
import java.util.Optional;

public class IOHelper {
    static List<Player> read(String source, Optional<String> filename) {
        List<Player> ret = null;
        switch (source) {
            case "json":
                ret = new JsonIOI().read(JsonIOI.getPlayerDataJson());
                break;
            case "array":
                break;
        }
        return ret;
    }
}
